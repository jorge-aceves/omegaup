<?php

/** ******************************************************************************* *
  *                    !ATENCION!                                                   *
  *                                                                                 *
  * Este codigo es generado automaticamente. Si lo modificas tus cambios seran      *
  * reemplazados la proxima vez que se autogenere el codigo.                        *
  *                                                                                 *
  * ******************************************************************************* */

/**
 * Value Object file for table User_Rank.
 *
 * VO does not have any behaviour.
 * @access public
 */
class UserRank extends VO {
    const FIELD_NAMES = [
        'user_id' => true,
        'rank' => true,
        'problems_solved_count' => true,
        'score' => true,
        'username' => true,
        'name' => true,
        'country_id' => true,
        'state_id' => true,
        'school_id' => true,
    ];

    /**
     * Constructor de UserRank
     *
     * Para construir un objeto de tipo UserRank debera llamarse a el constructor
     * sin parametros. Es posible, construir un objeto pasando como parametro un arreglo asociativo
     * cuyos campos son iguales a las variables que constituyen a este objeto.
     */
    function __construct(?array $data = null) {
        if (empty($data)) {
            return;
        }
        $unknownColumns = array_diff_key($data, self::FIELD_NAMES);
        if (!empty($unknownColumns)) {
            throw new Exception('Unknown columns: ' . join(', ', array_keys($unknownColumns)));
        }
        if (isset($data['user_id'])) {
            $this->user_id = (int)$data['user_id'];
        }
        if (isset($data['rank'])) {
            $this->rank = (int)$data['rank'];
        }
        if (isset($data['problems_solved_count'])) {
            $this->problems_solved_count = (int)$data['problems_solved_count'];
        }
        if (isset($data['score'])) {
            $this->score = (float)$data['score'];
        }
        if (isset($data['username'])) {
            $this->username = strval($data['username']);
        }
        if (isset($data['name'])) {
            $this->name = strval($data['name']);
        }
        if (isset($data['country_id'])) {
            $this->country_id = strval($data['country_id']);
        }
        if (isset($data['state_id'])) {
            $this->state_id = strval($data['state_id']);
        }
        if (isset($data['school_id'])) {
            $this->school_id = (int)$data['school_id'];
        }
    }

    /**
     * [Campo no documentado]
     * Llave Primaria
     *
     * @var int|null
     */
    public $user_id = null;

    /**
     * [Campo no documentado]
     *
     * @var int|null
     */
    public $rank = null;

    /**
     * [Campo no documentado]
     *
     * @var int
     */
    public $problems_solved_count = 0;

    /**
     * [Campo no documentado]
     *
     * @var float
     */
    public $score = 0.00;

    /**
     * [Campo no documentado]
     *
     * @var string|null
     */
    public $username = null;

    /**
     * [Campo no documentado]
     *
     * @var string|null
     */
    public $name = null;

    /**
     * [Campo no documentado]
     *
     * @var string|null
     */
    public $country_id = null;

    /**
     * [Campo no documentado]
     *
     * @var string|null
     */
    public $state_id = null;

    /**
     * [Campo no documentado]
     *
     * @var int|null
     */
    public $school_id = null;
}