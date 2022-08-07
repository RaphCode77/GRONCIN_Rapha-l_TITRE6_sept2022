<?php // src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator): Validator
    {
        return $validator
            ->notEmpty('email', "Un email est nécessaire")
            ->email('email')
            ->notEmpty('password', 'Un mot de passe est nécessaire')
            ->notEmpty('role', 'Un rôle est nécessaire')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Merci d\'entrer un rôle valide'
            ]);
    }

}