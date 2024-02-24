<?php

namespace App\Http\Resources;

use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $typeName = Type::find($this->type_id)->name ?? null;
        $agentName = User::find($this->user_id)->name ?? null;

        $resourceArray = [
            'id' => $this->id,
            'created_date' => $this->created_at->format('Y-m-d'),
            'created_time' => $this->created_at->format('H:i'),
        ];

        if ($this->price) {
            $resourceArray['price'] = $this->price;
        }
        if ($this->status) {
            $resourceArray['status'] = $this->status;
        }
        if ($this->weight) {
            $resourceArray['kg'] = $this->weight;
        }
        if ($typeName) {
            $resourceArray['category'] = $typeName;
        }
        if ($agentName) {
            $resourceArray['agent_name'] = $agentName;
        }
        if ($this->category) {
            $resourceArray['category'] = $this->category->name;
        }
        if ($this->import) {
            $resourceArray['kg'] = $this->import;
        }
        
        return $resourceArray;
    }
}
