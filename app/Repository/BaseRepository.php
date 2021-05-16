<?php   

namespace App\Repository;

use App\Exceptions\GeneralException;
use Illuminate\Database\Eloquent\Model;   
use App\Repository\Interfaces\EloquentRepositoryInterface; 

class BaseRepository implements EloquentRepositoryInterface 
{     
    /**      
     * @var Model      
     */     
     protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }
 
    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }
 
    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
    * @param $e
    */
    protected function throwException($e)
    {
        if (request()->expectsjson())
        {
            return false;
        } else 
        {
            throw new GeneralException(__('Something went wrong, internal server error'));
        }
    }
}