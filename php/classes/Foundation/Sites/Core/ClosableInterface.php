<?php

declare(strict_types=1);

/**
 * SPHPlayground Framework (https://playgound.samiholck.com/)
 *
 * @link      https://github.com/samhol/SPHP-framework for the source repository
 * @copyright Copyright (c) 2007-2018 Sami Holck <sami.holck@gmail.com>
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Sphp\Foundation\Sites\Core;

/**
 * Defines a closable component
 *
 * @author  Sami Holck <sami.holck@gmail.com>
 * @link    https://foundation.zurb.com/ Foundation
 * @link    https://foundation.zurb.com/sites/docs/close-button.html Foundation Close Button
 * @link    https://foundation.zurb.com/sites/docs/close-button.html#making-closable Foundation - Making Closable
 * @license https://opensource.org/licenses/MIT The MIT License
 * @link    https://github.com/samhol/SPHP-framework GitHub repository
 * @filesource
 */
interface ClosableInterface {

  /**
   * Sets/unsets the component closable
   * 
   * Values for `$closable` parameter
   * 
   * * `true`: the component is closable and the default closing effect is used 
   * * `'slide-out-right'`
   * * ...any other Foundation Motion UI effect string
   * * `false`: the component is not closable
   * 
   * @param  string|boolean $closable true for closable and false otherwise
   * @return $this for a fluent interface
   */
  public function setClosable($closable = true);

  /**
   * Checks whether the component is  set as closable or not
   * 
   * @return bool true if closable and false if not
   */
  public function isClosable(): bool;
}
