<?php

namespace App\Repositories;

use App\BillCategory;

class BillCategoryRepository
{

    protected $billCategory;

    /**
     * Repository constructor.
     */
    public function __construct(BillCategory $billCategory)
    {
        $this->billCategory = $billCategory;
    }

    /**
     * Get all items.
     */
    public function all()
    {
        return $this->billCategory->all();
    }

    /**
     * Create a model.
     */
    public function create(array $attributes)
    {
        return $this->billCategory->create($attributes);
    }

    public function update(array $data, $id)
    {
        $record = $this->billCategory->findOrFail($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->billCategory->destroy($id);
    }

    public function show($id)
    {
        return $this->billCategory->findOrFail($id);
    }
}