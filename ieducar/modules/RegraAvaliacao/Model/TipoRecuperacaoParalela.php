<?php

/**
 * i-Educar - Sistema de gestão escolar
 *
 * Copyright (C) 2006  Prefeitura Municipal de Itajaí
 *                     <ctima@itajai.sc.gov.br>
 *
 * Este programa é software livre; você pode redistribuí-lo e/ou modificá-lo
 * sob os termos da Licença Pública Geral GNU conforme publicada pela Free
 * Software Foundation; tanto a versão 2 da Licença, como (a seu critério)
 * qualquer versão posterior.
 *
 * Este programa é distribuí­do na expectativa de que seja útil, porém, SEM
 * NENHUMA GARANTIA; nem mesmo a garantia implí­cita de COMERCIABILIDADE OU
 * ADEQUAÇÃO A UMA FINALIDADE ESPECÍFICA. Consulte a Licença Pública Geral
 * do GNU para mais detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral do GNU junto
 * com este programa; se não, escreva para a Free Software Foundation, Inc., no
 * endereço 59 Temple Street, Suite 330, Boston, MA 02111-1307 USA.
 *
 * @author      Gabriel Matos de Souza <gabriel@portabilis.com.br>
 * @category    i-Educar
 * @license     @@license@@
 * @package     RegraAvaliacao
 * @subpackage  Modules
 * @since       Arquivo disponível desde a versão 1.1.0
 * @version     $Id$
 */

require_once 'CoreExt/Enum.php';

/**
 * RegraAvaliacao_Model_TipoRecuperacaoParalela class.
 *
 * @author      Gabriel Matos de Souza <gabriel@portabilis.com.br>
 * @category    i-Educar
 * @license     @@license@@
 * @package     RegraAvaliacao
 * @subpackage  Modules
 * @since       Classe disponível desde a versão 1.1.0
 * @version     @@package_version@@
 */
class RegraAvaliacao_Model_TipoRecuperacaoParalela extends CoreExt_Enum
{
  const NAO_USAR       = 0;
  const USAR_POR_ETAPA = 1;
  const USAR_POR_ETAPAS_ESPECIFICAS = 2;

  protected $_data = array(
    self::NAO_USAR       => 'N&atilde;o usar recupera&ccedil;&atilde;o paralela',
    self::USAR_POR_ETAPA => 'Usar uma recupera&ccedil;&atilde;o paralela por etapa',
    self::USAR_POR_ETAPAS_ESPECIFICAS => 'Usar uma recupera&ccedil;&atilde;o paralela por etapas espec&iacute;ficas'
  );

  public static function getInstance()
  {
    return self::_getInstance(__CLASS__);
  }
}
