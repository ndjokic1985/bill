<?php

namespace App\Services;

use App\Repositories\BillCategoryRepository;

class BillCategoryService
{

    protected $billCategoryRepository;

    public function __construct(BillCategoryRepository $billCategoryRepository)
    {
        $this->billCategoryRepository = $billCategoryRepository;
    }

    public function create($attributes)
    {
        $this->billCategoryRepository->create($attributes);
    }
    public function all()
    {
        return $this->billCategoryRepository->all();
    }
    public function show($id)
    {
        return $this->billCategoryRepository->show($id);
    }
    public function update($attributes, $id)
    {
        $this->billCategoryRepository->update($attributes, $id);
    }
    public function delete($id)
    {
        $this->billCategoryRepository->delete($id);
    }
}