<?php

namespace App\Http\Controllers\Api;

use App\Dtos\Factories\TransactionDtoFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Wallet;
use App\Repositories\WalletRepository;
use App\Services\Wallet\WalletBalanceHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(private WalletBalanceHandler $walletBalanceHandler)
    {
    }

    public function store(TransactionRequest $request): JsonResponse
    {
        $dto = TransactionDtoFactory::fromRequest($request);

        $this->walletBalanceHandler->handle($dto);

        return response()->json([
            'status' => 'ok',
            'balance' => $dto->getWallet()->fresh()->getBalanceAmount()->getAmount(),
        ]);
    }

    public function show(Request $request): JsonResponse
    {
        $wallet = Wallet::query()->findOrFail($request->input('wallet_id'));

        return response()->json([
            'balance' => $wallet->getBalanceAmount()->getAmount(),
        ]);
    }

    public function refunds(Request $request): JsonResponse
    {
        $repo = new WalletRepository();

        return response()->json([
            'refunds_raw' => $repo->getRefundsRawSql($request->input('wallet_id'), $request->input('days', 7)),
            'refunds_laravel' => $repo->getRefundsLaravelWay($request->input('wallet_id'), $request->input('days', 7)),
        ]);
    }
}
