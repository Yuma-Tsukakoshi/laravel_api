<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

//  APIでモデルデータをJSONデータとして返す場合、キー名をキャメル<=>スネークの変換や出力したくないデータを除外、
// データのフォーマットを中間で挟むケースがあります。 これらの処理を簡単に提供できる機能

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            // 0/1だったけど(bool)でキャストしている
            'is_completed'=> (bool)$this->is_completed,
        ];
    }
}
