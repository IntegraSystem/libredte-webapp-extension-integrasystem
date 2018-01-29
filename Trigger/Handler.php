<?php
/**
 * LibreDTE
 * Copyright (C) SASCO SpA (https://sasco.cl)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General Affero de GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General Affero de GNU para
 * obtener una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General Affero de GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/agpl.html>.
 */
namespace IntegraSystem\Triggers;
/**
 * Clase que procesa los triggers que la aplicación desea ejecutar
 * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
 * @version 2018-01-17
 */
class Trigger_Handler {
    /**
     * Método principal que recibe el trigger que se desea ejecutar y sus parámetros
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    public static function run($trigger, $args = null)
    {
        // verificar si método existe, si no existe, fallar silencionasamente
        $class = get_class();
        $method = 'procesar'.\sowerphp\core\Utility_Inflector::camelize($trigger);
        if (!method_exists($class, $method)) {
            return null;
        }
        // ejecutar método
        if ($args) {
            return call_user_func_array($class.'::'.$method, array_slice(func_get_args(), 1));
        } else {
            return self::$method();
        }
    }
    /**
     * Trigger que se ejecuta cuando un documento es emitido (se crea un DTE temporal)
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDocumentoEmitido(\website\Dte\Model_DteTmp $DteTmp)
    {
        // TODO: completar trigger
    }
    /**
     * Trigger que se ejecuta al generar el DTE real
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDocumentoGenerado(\website\Dte\Model_DteTmp $DteTmp, \website\Dte\Model_DteEmitido $DteEmitido)
    {
        // TODO: completar trigger
    }
    /**
     * Trigger que se procesa cuando se va a guardar un DTE temporal
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteTmpGuardar(\website\Dte\Model_DteTmp $DteTmp)
    {
        // TODO: completar trigger
    }
    /**
     * Trigger que se procesa cuando se obtienen los correos de un DTE temporal (permite agregar correos nuevos)
     * @return Arreglo con todos los correos, los que se pasaron al método + los nuevos encontrados (si es que hay)
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteTmpEmails(\website\Dte\Model_DteTmp $DteTmp, $emails)
    {
        // TODO: completar trigger
        return $emails;
    }
    /**
     * Trigger que se procesa antes de guardar un DTE emitido
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteEmitidoGuardar(\website\Dte\Model_DteEmitido $DteEmitido)
    {
        // TODO: completar trigger
    }
    /**
     * Trigger que se procesa antes de eliminar un DTE emitido
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteEmitidoEliminar(\website\Dte\Model_DteEmitido $DteEmitido)
    {
        // TODO: completar trigger
    }
    /**
     * Trigger que se procesa cuando se obtienen los correos de un DTE emitido (permite agregar correos nuevos)
     * @return Arreglo con todos los correos, los que se pasaron al método + los nuevos encontrados (si es que hay)
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteEmitidoEmails(\website\Dte\Model_DteEmitido $DteEmitido, $emails)
    {
        // TODO: completar trigger
        return $emails;
    }
    /**
     * Trigger que se procesa cuando se va a guardar un DTE recibido
     * @author Esteban De La Fuente Rubio, DeLaF (esteban[at]sasco.cl)
     * @version 2018-01-17
     */
    private static function procesarDteDteRecibidoGuardar(\website\Dte\Model_DteRecibido $DteRecibido)
    {
        // TODO: completar trigger
    }
}

?>