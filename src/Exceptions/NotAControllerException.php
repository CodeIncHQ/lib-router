<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     05/03/2018
// Time:     12:05
// Project:  lib-router
//
declare(strict_types = 1);
namespace CodeInc\Router\Exceptions;
use CodeInc\Router\ControllerInterface;
use CodeInc\Router\RouterInterface;
use Throwable;


/**
 * Class NotAControllerException
 *
 * @package CodeInc\Router\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class NotAControllerException extends RouterException
{
    /**
     * @var string
     */
	private $controllerClass;

    /**
     * NotAControllerException constructor.
     *
     * @param string $controllerClass
     * @param RouterInterface|null $router
     * @param int|null $code
     * @param null|Throwable $previous
     */
	public function __construct(string $controllerClass,
        ?RouterInterface $router = null, ?int $code = null,
		?Throwable $previous = null)
	{
		$this->controllerClass = $controllerClass;
		parent::__construct(
			sprintf("The class %s is not a controller. All controller must implement %s.",
				$this->controllerClass, ControllerInterface::class),
			$router, $code, $previous);
	}

	/**
	 * @return string
	 */
	public function getControllerClass():string
	{
		return $this->controllerClass;
	}
}