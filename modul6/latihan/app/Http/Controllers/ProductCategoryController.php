<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Http\Resources\ProductCategoryCollection;
use App\Http\Resources\ProductCategoryResource;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $productCategories = ProductCategory::all();
            return $this->apiResponse(data: new ProductCategoryCollection($productCategories));
        } catch (\Exception $e) {
            return $this->apiResponse(400, $e->getMessage(), null);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $validated = $request->validated();
        try {
            $productCategories = ProductCategory::create($validated);
            return $this->apiResponse(code: 201, data: new ProductCategoryResource($productCategories));
        } catch (\Exception $e) {
            return $this->apiResponse(400, $e->getMessage(), null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        try {
            return $this->apiResponse(data: new ProductCategoryResource($productCategory));
        } catch (\Exception $e) {
            return $this->apiResponse(400, $e->getMessage(), null);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $validated = $request->validated();
        try {
            $productCategory->update($validated);
            $productCategory->save();
            return $this->apiResponse(data: new ProductCategoryResource($productCategory));
        } catch (\Exception $e) {
            return $this->apiResponse(400, $e->getMessage(), null);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        try {
            $productCategory->delete();
            return $this->apiResponse(data: new ProductCategoryResource($productCategory));
        } catch (\Exception $e) {
            return $this->apiResponse(400, $e->getMessage(), null);
        }
    }
}
