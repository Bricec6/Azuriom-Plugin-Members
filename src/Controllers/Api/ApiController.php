<?php

namespace Azuriom\Plugin\Members\Controllers\Api;

use Azuriom\Plugin\Members\Controllers\MembersChoiceController;
use Illuminate\Http\JsonResponse;


class ApiController extends MembersChoiceController
{
    /**
     * Affiche la liste des joueurs en fonction du mode spécifié.
     *
     * Affiche la liste des joueurs avec leurs informations, en utilisant différents modes :
     * - 'allPlayers' : tous les joueurs sans leurs votes.
     * - 'withVote' : tous les joueurs avec leurs votes (tous les votes).
     * - 'withVoteMonthly' : tous les joueurs avec leurs votes (votes mensuels).
     * Si aucun mode n'est spécifié, tous les joueurs seront affichés.
     *
     * @return JsonResponse
     */
    public function index()
    {
        if ($this->mode === 'allPlayers') {
            $this->getAllPlayers();
        } else {
            if (plugins()->isEnabled('vote')) {
                $this->getAllPlayersWithVotes($this->mode === 'withVoteMonthly' ? 'monthly' : null);
            } else {
                $this->getAllPlayers();
            }
        }

        return response()->json([
            'type' => $this->mode,
            'users' => $this->users]);
    }
}
