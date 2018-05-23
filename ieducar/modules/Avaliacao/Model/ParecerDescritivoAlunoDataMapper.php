<?php

require_once 'CoreExt/DataMapper.php';
require_once 'Avaliacao/Model/ParecerDescritivoAluno.php';

/**
 * Avaliacao_Model_ParecerDescritivoAlunoDataMapper class.
 *
 * @author      Eriksen Costa Paixão <eriksen.paixao_bs@cobra.com.br>
 * @category    i-Educar
 * @license     @@license@@
 * @package     Avaliacao
 * @subpackage  Modules
 * @since       Classe disponível desde a versão 1.1.0
 * @version     @@package_version@@
 */
class Avaliacao_Model_ParecerDescritivoAlunoDataMapper extends CoreExt_DataMapper
{
    protected $_entityClass = 'Avaliacao_Model_ParecerDescritivoAluno';
    protected $_tableName   = 'parecer_aluno';
    protected $_tableSchema = 'modules';

    protected $_attributeMap = array(
        'id'                => 'id',
        'matricula'         => 'matricula_id',
        'parecerDescritivo' => 'parecer_descritivo'
    );
}
