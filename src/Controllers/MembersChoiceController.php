<?php

namespace Azuriom\Plugin\Members\Controllers;

use Azuriom\Http\Controllers\Controller;
use Azuriom\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class MembersChoiceController extends Controller
{
    /**
     * @property string $order
     * @property string $type
     * @property string $mode
     * @property string $defaultMode
     */
    public $users;
    public $order;
    public $mode;
    public $defaultMode = 'allPlayers';

    public function __construct(){
        $this->mode = setting('members.mode', $this->defaultMode);
    }

    /**
     * Récupère les paramètres du plugin depuis la DB.
     *
     * @return array
     */
    public function getSettings(){
        return
            [
                'mode' => setting('members.mode', $this->defaultMode),
                'show_id' =>  setting('members.show_id'),
                'show_avatar' =>  setting('members.show_avatar'),
                'show_role' =>  setting('members.show_role'),
                'show_name' =>  setting('members.show_name'),
                'show_votes' =>  setting('members.show_votes') ,
                'show_money' =>  setting('members.show_money') ,
                'show_createdAt' =>  setting('members.show_createdAt'),
            ];
    }

    /**
     * Obtient les meilleurs voteurs.
     *
     * Récupère les meilleurs voteurs pour une période donnée ou non.
     *
     * @param Carbon $fromDate La date de début.
     * @param Carbon|null $toDate La date de fin de la période (facultative).
     * @param string $voteMode Le mode de vote ('monthly' pour mensuel, par exemple).
     * @return Collection.
     */
    public static function getTopVoters(Carbon $fromDate, Carbon $toDate = null, $voteMode)
    {
        $users = User::leftJoin('vote_votes', 'users.id', '=', 'vote_votes.user_id')->selectRaw('users.*, COUNT(vote_votes.id) as vote_count');

        if($voteMode === 'monthly'){
            // Prend les votes par mois
            $users = $users->where(function ($query) use ($fromDate) {
                $query->whereNull('vote_votes.created_at')
                    ->orWhere('vote_votes.created_at', '>=', $fromDate);
            });
        }

        $users = $users->groupBy('users.id')->get();

        if($voteMode === 'monthly') {
            // Ajout des utilisateurs sans votes avec un compteur à 0
            $usersWithoutVotes = User::whereNotIn('id', $users->pluck('id'))
                ->selectRaw('users.*, 0 as vote_count')
                ->get();
            $users = $users->concat($usersWithoutVotes);
        }

        return $users->map(function ($user) {
            $user['votes'] = $user->vote_count;
            unset($user['vote_count']);
            return $user;
        });


    }

    /**
     * Récupère tous les joueurs avec leurs votes.
     *
     * Récupère tous les joueurs avec leurs informations et leurs votes selon le mode spécifié.
     *
     * @param string $voteMode Le mode de vote à utiliser par défaut, le mode est défini sur 'all'.
     * @return void
     */
    public function getAllPlayersWithVotes($voteMode = 'all')
    {
        $votes = self::getTopVoters(now()->startOfMonth(), null, $voteMode)->map(function ($value) {
            return (object) [
                'id' => $value->id,
                'name' => $value->name,
                'role' => [
                    'name' => $value->role->name,
                    'color' => $value->role->color,
                ],
                'money' => $value->money,
                'created_at' => $value->created_at->translatedFormat('l d/m/Y'),
                'votes' => $value->votes,
            ];
        });
        $this->users = $votes;
    }

    /**
     * Récupère tous les joueurs.
     *
     * Récupère tous les joueurs avec leurs informations, éventuellement accompagnées de commentaires.
     *
     * @param mixed|null $comments Les commentaires associés aux joueurs (facultatif).
     * @return void
     */
    public function getAllPlayers($comments = null){

        if ($comments != null){
            $this->users = User::withCount('comments')->get();
        } else {
            $this->users = User::all();
        }

        $this->users = $this->users->map(function ($value) use ($comments) {
            return (object) [
                'id' => $value->id,
                'name' => $value->name,
                'role' => [
                    'name' => $value->role->name,
                    'color' => $value->role->color,
                ],
//                'comments' => $comments ? $value->comments_count : null,
                'money' => $value->money,
                'created_at' => $value->created_at->translatedFormat('l d/m/Y'),
            ];
        });
    }
}
