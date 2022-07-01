<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

abstract class EloquentRepository
{

    public function list($fields)
    {
        return  $this->model->select($fields)->get();
    }

    public function changeStatus($id, $status)
    {
        $item = $this->model->findOrFail($id);
        $item->status = $status;
        $result = $item->save();
        return $item;
    }

    public function changePromote($id, $promoted)
    {
        $item = $this->model->findOrFail($id);
        $item->promoted = $promoted;
        $result = $item->save();
        return $item;
    }

    public function changeSticky($id, $sticky)
    {
        $item = $this->model->findOrFail($id);
        $item->sticky = $sticky;
        $result = $item->save();
        return $item;
    }

    public function changeViewed($id, $viewed)
    {
        $item = $this->model->findOrFail($id);
        $item->viewed = $viewed;
        $result = $item->save();
        return $item;
    }

    public function duplicate($id)
    {
        $item = $this->model->findOrFail($id);
        $new = $item->replicate();
        $new->save();
        return $new;
    }

    public function detachMedia($type, $mediable_id, $mediable_type)
    {
        DB::table("mediable")
            ->leftJoin("medias", "medias.id", "=", "mediable.media_id")
            ->where("medias.type", $type)
            ->where("mediable.mediable_id", $mediable_id)
            ->where("mediable.mediable_type", $mediable_type)
            ->delete();
    }

    public function attachMedia($mediable_id, $mediable_type, $media_id)
    {
        if ($mediable_id and $mediable_type and $media_id) {
            DB::table("mediable")->insert(
                [
                    "mediable_id" => $mediable_id,
                    "media_id" => $media_id,
                    "mediable_type" => $mediable_type,
                ]
            );
        }
    }

    public function search($data)
    {
        if (isset($data["q"])) {
            $ids = $this->search->search($data["q"], $data["index"]);
        } else {
            $ids = [];
        }

        $items = $this->model->whereIn("id", $ids);

        if (isset($data["status"])) {
            $items = $items->where("status", $data["status"]);
        }

        if (isset($data["with"])) {
            $items = $items->with($data["with"]);
        }

        if (isset($data["language_id"])) {
            $items = $items->where("language_id", $data["language_id"]);
        }
        $items = $items->paginate($data["per_page"], ["*"], $data["page_name"]);

        return $items;
    }
}
