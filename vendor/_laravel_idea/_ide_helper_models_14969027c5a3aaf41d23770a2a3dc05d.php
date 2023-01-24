<?php //cafedc99384798031b51871467b73089
/** @noinspection all */

namespace Laravel\Passport {

    use App\Models\User;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Carbon;
    use Laravel\Passport\Database\Factories\ClientFactory;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_AuthCode_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_PersonalAccessClient_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_RefreshToken_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_QB;

    /**
     * @property string $id
     * @property int $user_id
     * @property string $client_id
     * @property string|null $scopes
     * @property bool $revoked
     * @property Carbon|null $expires_at
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @method static _IH_AuthCode_QB onWriteConnection()
     * @method _IH_AuthCode_QB newQuery()
     * @method static _IH_AuthCode_QB on(null|string $connection = null)
     * @method static _IH_AuthCode_QB query()
     * @method static _IH_AuthCode_QB with(array|string $relations)
     * @method _IH_AuthCode_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AuthCode_C|AuthCode[] all()
     * @ownLinks user_id,\App\Models\User,id|client_id,\App\Models\Client,id
     * @mixin _IH_AuthCode_QB
     */
    class AuthCode extends Model {}

    /**
     * @property string $id
     * @property int|null $user_id
     * @property string $name
     * @property string|null $secret
     * @property string|null $provider
     * @property string $redirect
     * @property bool $personal_access_client
     * @property bool $password_client
     * @property bool $revoked
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $plain_secret attribute
     * @property _IH_AuthCode_C|AuthCode[] $authCodes
     * @property-read int $auth_codes_count
     * @method HasMany|_IH_AuthCode_QB authCodes()
     * @property _IH_Token_C|Token[] $tokens
     * @property-read int $tokens_count
     * @method HasMany|_IH_Token_QB tokens()
     * @method static _IH_Client_QB onWriteConnection()
     * @method _IH_Client_QB newQuery()
     * @method static _IH_Client_QB on(null|string $connection = null)
     * @method static _IH_Client_QB query()
     * @method static _IH_Client_QB with(array|string $relations)
     * @method _IH_Client_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Client_C|Client[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Client_QB
     * @method static ClientFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Client extends Model {}

    /**
     * @property int $id
     * @property string $client_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @method static _IH_PersonalAccessClient_QB onWriteConnection()
     * @method _IH_PersonalAccessClient_QB newQuery()
     * @method static _IH_PersonalAccessClient_QB on(null|string $connection = null)
     * @method static _IH_PersonalAccessClient_QB query()
     * @method static _IH_PersonalAccessClient_QB with(array|string $relations)
     * @method _IH_PersonalAccessClient_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PersonalAccessClient_C|PersonalAccessClient[] all()
     * @ownLinks client_id,\App\Models\Client,id
     * @mixin _IH_PersonalAccessClient_QB
     */
    class PersonalAccessClient extends Model {}

    /**
     * @property string $id
     * @property string $access_token_id
     * @property bool $revoked
     * @property Carbon|null $expires_at
     * @property Token $accessToken
     * @method BelongsTo|_IH_Token_QB accessToken()
     * @method static _IH_RefreshToken_QB onWriteConnection()
     * @method _IH_RefreshToken_QB newQuery()
     * @method static _IH_RefreshToken_QB on(null|string $connection = null)
     * @method static _IH_RefreshToken_QB query()
     * @method static _IH_RefreshToken_QB with(array|string $relations)
     * @method _IH_RefreshToken_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RefreshToken_C|RefreshToken[] all()
     * @mixin _IH_RefreshToken_QB
     */
    class RefreshToken extends Model {}

    /**
     * @property string $id
     * @property int|null $user_id
     * @property string $client_id
     * @property string|null $name
     * @property array|null $scopes
     * @property bool $revoked
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $expires_at
     * @property Client $client
     * @method BelongsTo|_IH_Client_QB client()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Token_QB onWriteConnection()
     * @method _IH_Token_QB newQuery()
     * @method static _IH_Token_QB on(null|string $connection = null)
     * @method static _IH_Token_QB query()
     * @method static _IH_Token_QB with(array|string $relations)
     * @method _IH_Token_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Token_C|Token[] all()
     * @ownLinks user_id,\App\Models\User,id|client_id,\App\Models\Client,id
     * @mixin _IH_Token_QB
     */
    class Token extends Model {}
}
