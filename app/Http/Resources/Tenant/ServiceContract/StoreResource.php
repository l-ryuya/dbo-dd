<?php

declare(strict_types=1);

namespace App\Http\Resources\Tenant\ServiceContract;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $serviceContractPublicId
 */
class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array{serviceContractPublicId: string}
     */
    public function toArray(Request $request): array
    {
        return [
            'serviceContractPublicId' => $this->serviceContractPublicId,
        ];
    }
}
