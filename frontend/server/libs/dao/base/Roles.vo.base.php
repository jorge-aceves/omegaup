<?php

/** ******************************************************************************* *
  *                    !ATENCION!                                                   *
  *                                                                                 *
  * Este codigo es generado automaticamente. Si lo modificas tus cambios seran      *
  * reemplazados la proxima vez que se autogenere el codigo.                        *
  *                                                                                 *
  * ******************************************************************************* */

/**
 * Value Object file for table Roles.
 *
 * VO does not have any behaviour.
 * @access public
 */
class Roles extends VO {
    const FIELD_NAMES = [
        'role_id' => true,
        'name' => true,
        'description' => true,
    ];

    /**
     * Constructor de Roles
     *
     * Para construir un objeto de tipo Roles debera llamarse a el constructor
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
        if (isset($data['role_id'])) {
            $this->role_id = (int)$data['role_id'];
        }
        if (isset($data['name'])) {
            $this->name = strval($data['name']);
        }
        if (isset($data['description'])) {
            $this->description = strval($data['description']);
        }
    }

    /**
     * [Campo no documentado]
     * Llave Primaria
     * Auto Incremento
     *
     * @var int|null
     */
    public $role_id = 0;

    /**
     * El nombre corto del rol.
     *
     * @var string|null
     */
    public $name = null;

    /**
     * La descripción humana del rol.
     *
     * @var string|null
     */
    public $description = null;
}