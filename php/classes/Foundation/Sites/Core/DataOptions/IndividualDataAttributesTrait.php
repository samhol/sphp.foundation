<?php

declare(strict_types=1);

/**
 * SPHPlayground Framework (https://playgound.samiholck.com/)
 *
 * @link      https://github.com/samhol/SPHP-framework for the source repository
 * @copyright Copyright (c) 2007-2019 Sami Holck <sami.holck@gmail.com>
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Sphp\Foundation\Sites\Core\DataOptions;

/**
 * Description of IndividualDataAttributesTrait
 *
 * @author  Sami Holck <sami.holck@gmail.com>
 * @license https://opensource.org/licenses/MIT The MIT License
 * @filesource
 */
trait IndividualDataAttributesTrait {

  abstract public function setAttribute(string $name, $value);

  /**
   * Sets a menu option used in a Foundation menu
   * 
   * @param  string $name the name of the option
   * @param  scalar $value the value of the option
   * @return $this for a fluent interface
   */
  public function setOption(string $name, $value) {
    $attrName = DataOptionTools::toDataAttribute($name);
    $attrValue = DataOptionTools::parseValue($value);
    $this->setAttribute($attrName, $attrValue);
    return $this;
  }

}
