<?php //7ce5c499d7ae8fb0757c1e0d2eae86cc
/** @noinspection all */

namespace App\Models {

    use Database\Factories\ClientFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Passport\Client as Client1;
    use Laravel\Passport\Token;
    use LaravelIdea\Helper\App\Models\_IH_Client_C;
    use LaravelIdea\Helper\App\Models\_IH_Client_QB;
    use LaravelIdea\Helper\App\Models\_IH_Room_C;
    use LaravelIdea\Helper\App\Models\_IH_Room_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_C as _IH_Client_C1;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Client_QB as _IH_Client_QB1;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_C;
    use LaravelIdea\Helper\Laravel\Passport\_IH_Token_QB;
    
    /**
     * @property int $id
     * @property string $name
     * @property string $social_security
     * @property string $contact_number
     * @property string $address
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Client_QB onWriteConnection()
     * @method _IH_Client_QB newQuery()
     * @method static _IH_Client_QB on(null|string $connection = null)
     * @method static _IH_Client_QB query()
     * @method static _IH_Client_QB with(array|string $relations)
     * @method _IH_Client_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Client_C|Client[] all()
     * @foreignLinks id,\Laravel\Passport\AuthCode,client_id|id,\Laravel\Passport\Token,client_id|id,\Laravel\Passport\PersonalAccessClient,client_id|id,\App\Models\Room,client_id
     * @mixin _IH_Client_QB
     * @method static ClientFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Client extends Model {}
    
    /**
     * @property int $id
     * @property int|null $client_id
     * @property int|null $room_number
     * @property int $beds_number
     * @property string|null $description
     * @property float $price
     * @property string $status
     * @property Carbon $occupied_from
     * @property Carbon $occupied_to
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Client $client
     * @method HasOne|_IH_Client_QB client()
     * @method static _IH_Room_QB onWriteConnection()
     * @method _IH_Room_QB newQuery()
     * @method static _IH_Room_QB on(null|string $connection = null)
     * @method static _IH_Room_QB query()
     * @method static _IH_Room_QB with(array|string $relations)
     * @method _IH_Room_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Room_C|Room[] all()
     * @ownLinks client_id,\App\Models\Client,id
     * @mixin _IH_Room_QB
     */
    class Room extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Client_C1|Client1[] $clients
     * @property-read int $clients_count
     * @method HasMany|_IH_Client_QB1 clients()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Token_C|Token[] $tokens
     * @property-read int $tokens_count
     * @method HasMany|_IH_Token_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\Laravel\Passport\AuthCode,user_id|id,\Laravel\Passport\Token,user_id|id,\Laravel\Passport\Client,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}