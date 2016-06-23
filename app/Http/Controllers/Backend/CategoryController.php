<?php

namespace App\Http\Controllers\Backend;
use Carbon\Carbon;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Repositories\Backend\Category\CategoryRepositoryContract;
/**
 * Class CategoryController
 * @package App\Http\Controllers\Backend
 */
class CategoryController extends Controller
{
    /**
     * @var CategoryRepositoryContract
     */
    protected $category;
    public function __construct(CategoryRepositoryContract $category)
    {
        $this->category = $category;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.category.index');
    }

        /**
         * @return \Illuminate\View\View
         */
        public function create(){

        }
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getData()
    {
        return Datatables::of($this->category->getAllCategory())
            ->addColumn('action', function ($category) {
                return '<a href="#edit-'.$category->id.'" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Sửa</a>'
                       .'<a href="#delete-'.$category->id.'" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Xóa</a>';
            })
            ->editColumn('created_at', function ($category) {
                return $category->created_at ? with(new Carbon($category->created_at))->format('d/m/Y') : '';
            })
            ->editColumn('active', function ($category) {
                return $category->active==1 ? '<i class="fa fa-check"></i>' : '<i class="fa fa-remove"></i>';
            })->make(true);
    }
}