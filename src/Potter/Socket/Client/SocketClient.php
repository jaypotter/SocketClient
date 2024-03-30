<?php

declare(strict_types=1);

namespace Potter\Socket\Client;

use \Potter\Aware\{AwareInterface, AwareTrait};
use \Potter\Cloneable\{CloneableInterface, CloneableTrait};
use \Potter\Container\ContainerInterface;
use \Potter\Container\Aware\{ContainerAwareInterface, ContainerAwareTrait};
use \Potter\Socket\Aware\{SocketAwareInterface, SocketAwareTrait};

final class SocketClient extends AbstractSocketServer implements AwareInterface, CloneableInterface, ContainerAwareInterface, SocketAwareInterface
{
    use AwareTrait, CloneableTrait, ContainerAwareTrait, SocketAwareTrait;
    
    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
    }
}