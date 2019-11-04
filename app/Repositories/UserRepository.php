<?php
namespace App\Repositories;

use App\User as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserRepository
 * @package App\Repositories
 */

class UserRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getUserById($id){
        $result = $this->startConditions()->find($id);
        return $result;
    }


}
