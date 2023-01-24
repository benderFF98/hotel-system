<?php //78ec2b0d7e2ca8023c8c0c72020036a4
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Passport {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Laravel\Passport\AuthCode;
    use Laravel\Passport\Client;
    use Laravel\Passport\PersonalAccessClient;
    use Laravel\Passport\RefreshToken;
    use Laravel\Passport\Token;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method AuthCode|null getOrPut($key, $value)
     * @method AuthCode|$this shift(int $count = 1)
     * @method AuthCode|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AuthCode|$this pop(int $count = 1)
     * @method AuthCode|null pull($key, \Closure $default = null)
     * @method AuthCode|null last(callable $callback = null, \Closure $default = null)
     * @method AuthCode|$this random(callable|int|null $number = null)
     * @method AuthCode|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AuthCode|null get($key, \Closure $default = null)
     * @method AuthCode|null first(callable $callback = null, \Closure $default = null)
     * @method AuthCode|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AuthCode|null find($key, $default = null)
     * @method AuthCode[] all()
     */
    class _IH_AuthCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuthCode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_AuthCode_QB whereId($value)
     * @method _IH_AuthCode_QB whereUserId($value)
     * @method _IH_AuthCode_QB whereClientId($value)
     * @method _IH_AuthCode_QB whereScopes($value)
     * @method _IH_AuthCode_QB whereRevoked($value)
     * @method _IH_AuthCode_QB whereExpiresAt($value)
     * @method AuthCode baseSole(array|string $columns = ['*'])
     * @method AuthCode create(array $attributes = [])
     * @method _IH_AuthCode_C|AuthCode[] cursor()
     * @method AuthCode|null|_IH_AuthCode_C|AuthCode[] find($id, array|string $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrFail($id, array|string $columns = ['*'])
     * @method AuthCode|_IH_AuthCode_C|AuthCode[] findOrNew($id, array|string $columns = ['*'])
     * @method AuthCode first(array|string $columns = ['*'])
     * @method AuthCode firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AuthCode firstOrCreate(array $attributes = [], array $values = [])
     * @method AuthCode firstOrFail(array|string $columns = ['*'])
     * @method AuthCode firstOrNew(array $attributes = [], array $values = [])
     * @method AuthCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuthCode forceCreate(array $attributes)
     * @method _IH_AuthCode_C|AuthCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuthCode_C|AuthCode[] get(array|string $columns = ['*'])
     * @method AuthCode getModel()
     * @method AuthCode[] getModels(array|string $columns = ['*'])
     * @method _IH_AuthCode_C|AuthCode[] hydrate(array $items)
     * @method AuthCode make(array $attributes = [])
     * @method AuthCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuthCode[]|_IH_AuthCode_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuthCode[]|_IH_AuthCode_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuthCode sole(array|string $columns = ['*'])
     * @method AuthCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuthCode_QB extends _BaseBuilder {}

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
     * @method _IH_Client_QB whereUserId($value)
     * @method _IH_Client_QB whereName($value)
     * @method _IH_Client_QB whereSecret($value)
     * @method _IH_Client_QB whereProvider($value)
     * @method _IH_Client_QB whereRedirect($value)
     * @method _IH_Client_QB wherePersonalAccessClient($value)
     * @method _IH_Client_QB wherePasswordClient($value)
     * @method _IH_Client_QB whereRevoked($value)
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
     * @method PersonalAccessClient|null getOrPut($key, $value)
     * @method PersonalAccessClient|$this shift(int $count = 1)
     * @method PersonalAccessClient|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessClient|$this pop(int $count = 1)
     * @method PersonalAccessClient|null pull($key, \Closure $default = null)
     * @method PersonalAccessClient|null last(callable $callback = null, \Closure $default = null)
     * @method PersonalAccessClient|$this random(callable|int|null $number = null)
     * @method PersonalAccessClient|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessClient|null get($key, \Closure $default = null)
     * @method PersonalAccessClient|null first(callable $callback = null, \Closure $default = null)
     * @method PersonalAccessClient|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PersonalAccessClient|null find($key, $default = null)
     * @method PersonalAccessClient[] all()
     */
    class _IH_PersonalAccessClient_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessClient[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PersonalAccessClient_QB whereId($value)
     * @method _IH_PersonalAccessClient_QB whereClientId($value)
     * @method _IH_PersonalAccessClient_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessClient_QB whereUpdatedAt($value)
     * @method PersonalAccessClient baseSole(array|string $columns = ['*'])
     * @method PersonalAccessClient create(array $attributes = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] cursor()
     * @method PersonalAccessClient|null|_IH_PersonalAccessClient_C|PersonalAccessClient[] find($id, array|string $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrFail($id, array|string $columns = ['*'])
     * @method PersonalAccessClient|_IH_PersonalAccessClient_C|PersonalAccessClient[] findOrNew($id, array|string $columns = ['*'])
     * @method PersonalAccessClient first(array|string $columns = ['*'])
     * @method PersonalAccessClient firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessClient firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstOrFail(array|string $columns = ['*'])
     * @method PersonalAccessClient firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessClient firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessClient forceCreate(array $attributes)
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] get(array|string $columns = ['*'])
     * @method PersonalAccessClient getModel()
     * @method PersonalAccessClient[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessClient_C|PersonalAccessClient[] hydrate(array $items)
     * @method PersonalAccessClient make(array $attributes = [])
     * @method PersonalAccessClient newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PersonalAccessClient[]|_IH_PersonalAccessClient_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessClient sole(array|string $columns = ['*'])
     * @method PersonalAccessClient updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessClient_QB extends _BaseBuilder {}

    /**
     * @method RefreshToken|null getOrPut($key, $value)
     * @method RefreshToken|$this shift(int $count = 1)
     * @method RefreshToken|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method RefreshToken|$this pop(int $count = 1)
     * @method RefreshToken|null pull($key, \Closure $default = null)
     * @method RefreshToken|null last(callable $callback = null, \Closure $default = null)
     * @method RefreshToken|$this random(callable|int|null $number = null)
     * @method RefreshToken|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method RefreshToken|null get($key, \Closure $default = null)
     * @method RefreshToken|null first(callable $callback = null, \Closure $default = null)
     * @method RefreshToken|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method RefreshToken|null find($key, $default = null)
     * @method RefreshToken[] all()
     */
    class _IH_RefreshToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RefreshToken[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_RefreshToken_QB whereId($value)
     * @method _IH_RefreshToken_QB whereAccessTokenId($value)
     * @method _IH_RefreshToken_QB whereRevoked($value)
     * @method _IH_RefreshToken_QB whereExpiresAt($value)
     * @method RefreshToken baseSole(array|string $columns = ['*'])
     * @method RefreshToken create(array $attributes = [])
     * @method _IH_RefreshToken_C|RefreshToken[] cursor()
     * @method RefreshToken|null|_IH_RefreshToken_C|RefreshToken[] find($id, array|string $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrFail($id, array|string $columns = ['*'])
     * @method RefreshToken|_IH_RefreshToken_C|RefreshToken[] findOrNew($id, array|string $columns = ['*'])
     * @method RefreshToken first(array|string $columns = ['*'])
     * @method RefreshToken firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RefreshToken firstOrCreate(array $attributes = [], array $values = [])
     * @method RefreshToken firstOrFail(array|string $columns = ['*'])
     * @method RefreshToken firstOrNew(array $attributes = [], array $values = [])
     * @method RefreshToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RefreshToken forceCreate(array $attributes)
     * @method _IH_RefreshToken_C|RefreshToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RefreshToken_C|RefreshToken[] get(array|string $columns = ['*'])
     * @method RefreshToken getModel()
     * @method RefreshToken[] getModels(array|string $columns = ['*'])
     * @method _IH_RefreshToken_C|RefreshToken[] hydrate(array $items)
     * @method RefreshToken make(array $attributes = [])
     * @method RefreshToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RefreshToken[]|_IH_RefreshToken_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|RefreshToken[]|_IH_RefreshToken_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RefreshToken sole(array|string $columns = ['*'])
     * @method RefreshToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RefreshToken_QB extends _BaseBuilder {}

    /**
     * @method Token|null getOrPut($key, $value)
     * @method Token|$this shift(int $count = 1)
     * @method Token|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Token|$this pop(int $count = 1)
     * @method Token|null pull($key, \Closure $default = null)
     * @method Token|null last(callable $callback = null, \Closure $default = null)
     * @method Token|$this random(callable|int|null $number = null)
     * @method Token|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Token|null get($key, \Closure $default = null)
     * @method Token|null first(callable $callback = null, \Closure $default = null)
     * @method Token|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Token|null find($key, $default = null)
     * @method Token[] all()
     */
    class _IH_Token_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Token[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Token_QB whereId($value)
     * @method _IH_Token_QB whereUserId($value)
     * @method _IH_Token_QB whereClientId($value)
     * @method _IH_Token_QB whereName($value)
     * @method _IH_Token_QB whereScopes($value)
     * @method _IH_Token_QB whereRevoked($value)
     * @method _IH_Token_QB whereCreatedAt($value)
     * @method _IH_Token_QB whereUpdatedAt($value)
     * @method _IH_Token_QB whereExpiresAt($value)
     * @method Token baseSole(array|string $columns = ['*'])
     * @method Token create(array $attributes = [])
     * @method _IH_Token_C|Token[] cursor()
     * @method Token|null|_IH_Token_C|Token[] find($id, array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Token|_IH_Token_C|Token[] findOrFail($id, array|string $columns = ['*'])
     * @method Token|_IH_Token_C|Token[] findOrNew($id, array|string $columns = ['*'])
     * @method Token first(array|string $columns = ['*'])
     * @method Token firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Token firstOrCreate(array $attributes = [], array $values = [])
     * @method Token firstOrFail(array|string $columns = ['*'])
     * @method Token firstOrNew(array $attributes = [], array $values = [])
     * @method Token firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Token forceCreate(array $attributes)
     * @method _IH_Token_C|Token[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Token_C|Token[] get(array|string $columns = ['*'])
     * @method Token getModel()
     * @method Token[] getModels(array|string $columns = ['*'])
     * @method _IH_Token_C|Token[] hydrate(array $items)
     * @method Token make(array $attributes = [])
     * @method Token newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Token[]|_IH_Token_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Token[]|_IH_Token_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Token sole(array|string $columns = ['*'])
     * @method Token updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Token_QB extends _BaseBuilder {}
}
