<?php //c81ece999335ca7ed78d17869c270cde
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Client;
    use App\Models\Room;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method Client|null getOrPut($key, $value)
     * @method Client|$this shift(int $count = 1)
     * @method Client|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Client|$this pop(int $count = 1)
     * @method Client|null pull($key, \Closure $default = null)
     * @method Client|null last(callable $callback = null, \Closure $default = null)
     * @method Client|$this random(callable|int|null $number = null)
     * @method Client|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Client|null get($key, \Closure $default = null)
     * @method Client|null first(callable $callback = null, \Closure $default = null)
     * @method Client|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Client|null find($key, $default = null)
     * @method Client[] all()
     */
    class _IH_Client_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Client[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Client_QB whereId($value)
     * @method _IH_Client_QB whereName($value)
     * @method _IH_Client_QB whereSocialSecurity($value)
     * @method _IH_Client_QB whereContactNumber($value)
     * @method _IH_Client_QB whereAddress($value)
     * @method _IH_Client_QB whereCreatedAt($value)
     * @method _IH_Client_QB whereUpdatedAt($value)
     * @method Client baseSole(array|string $columns = ['*'])
     * @method Client create(array $attributes = [])
     * @method _IH_Client_C|Client[] cursor()
     * @method Client|null|_IH_Client_C|Client[] find($id, array|string $columns = ['*'])
     * @method _IH_Client_C|Client[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Client|_IH_Client_C|Client[] findOrFail($id, array|string $columns = ['*'])
     * @method Client|_IH_Client_C|Client[] findOrNew($id, array|string $columns = ['*'])
     * @method Client first(array|string $columns = ['*'])
     * @method Client firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Client firstOrCreate(array $attributes = [], array $values = [])
     * @method Client firstOrFail(array|string $columns = ['*'])
     * @method Client firstOrNew(array $attributes = [], array $values = [])
     * @method Client firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Client forceCreate(array $attributes)
     * @method _IH_Client_C|Client[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Client_C|Client[] get(array|string $columns = ['*'])
     * @method Client getModel()
     * @method Client[] getModels(array|string $columns = ['*'])
     * @method _IH_Client_C|Client[] hydrate(array $items)
     * @method Client make(array $attributes = [])
     * @method Client newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Client[]|_IH_Client_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Client[]|_IH_Client_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Client sole(array|string $columns = ['*'])
     * @method Client updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Client_QB extends _BaseBuilder {}
    
    /**
     * @method Room|null getOrPut($key, $value)
     * @method Room|$this shift(int $count = 1)
     * @method Room|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Room|$this pop(int $count = 1)
     * @method Room|null pull($key, \Closure $default = null)
     * @method Room|null last(callable $callback = null, \Closure $default = null)
     * @method Room|$this random(callable|int|null $number = null)
     * @method Room|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Room|null get($key, \Closure $default = null)
     * @method Room|null first(callable $callback = null, \Closure $default = null)
     * @method Room|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Room|null find($key, $default = null)
     * @method Room[] all()
     */
    class _IH_Room_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Room[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Room_QB whereId($value)
     * @method _IH_Room_QB whereClientId($value)
     * @method _IH_Room_QB whereRoomNumber($value)
     * @method _IH_Room_QB whereBedsNumber($value)
     * @method _IH_Room_QB whereDescription($value)
     * @method _IH_Room_QB wherePrice($value)
     * @method _IH_Room_QB whereStatus($value)
     * @method _IH_Room_QB whereOccupiedFrom($value)
     * @method _IH_Room_QB whereOccupiedTo($value)
     * @method _IH_Room_QB whereCreatedAt($value)
     * @method _IH_Room_QB whereUpdatedAt($value)
     * @method Room baseSole(array|string $columns = ['*'])
     * @method Room create(array $attributes = [])
     * @method _IH_Room_C|Room[] cursor()
     * @method Room|null|_IH_Room_C|Room[] find($id, array|string $columns = ['*'])
     * @method _IH_Room_C|Room[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Room|_IH_Room_C|Room[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Room|_IH_Room_C|Room[] findOrFail($id, array|string $columns = ['*'])
     * @method Room|_IH_Room_C|Room[] findOrNew($id, array|string $columns = ['*'])
     * @method Room first(array|string $columns = ['*'])
     * @method Room firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Room firstOrCreate(array $attributes = [], array $values = [])
     * @method Room firstOrFail(array|string $columns = ['*'])
     * @method Room firstOrNew(array $attributes = [], array $values = [])
     * @method Room firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Room forceCreate(array $attributes)
     * @method _IH_Room_C|Room[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Room_C|Room[] get(array|string $columns = ['*'])
     * @method Room getModel()
     * @method Room[] getModels(array|string $columns = ['*'])
     * @method _IH_Room_C|Room[] hydrate(array $items)
     * @method Room make(array $attributes = [])
     * @method Room newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Room[]|_IH_Room_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Room[]|_IH_Room_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Room sole(array|string $columns = ['*'])
     * @method Room updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Room_QB beds($value)
     * @method _IH_Room_QB price($valueOne, $valueTwo)
     * @method _IH_Room_QB status($value)
     */
    class _IH_Room_QB extends _BaseBuilder {}
    
    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}