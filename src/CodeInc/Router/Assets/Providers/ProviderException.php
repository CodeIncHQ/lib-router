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
// Date:     20/02/2018
// Time:     14:00
// Project:  lib-router
//
namespace CodeInc\Router\Assets\Providers;
use Throwable;


/**
 * Class ProviderException
 *
 * @package CodeInc\Router\Assets\Providers
 * @author Joan Fabrégat <joan@codeinc.fr>
 * @todo changer l'héritage
 */
class ProviderException extends \Exception {
	/**
	 * @var AssetsProviderInterface
	 */
	private $assetsProvider;

	/**
	 * ProviderException constructor.
	 *
	 * @param string $message
	 * @param AssetsProviderInterface $assetsProvider
	 * @param Throwable|null $previous
	 */
	public function __construct(string $message, AssetsProviderInterface $assetsProvider, Throwable $previous = null) {
		$this->assetsProvider = $assetsProvider;
		parent::__construct($message, 0, $previous);
	}

	/**
	 * @return AssetsProviderInterface
	 */
	public function getAssetsProvider():AssetsProviderInterface {
		return $this->assetsProvider;
	}
}