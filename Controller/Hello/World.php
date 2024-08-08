<?php
declare(strict_types=1);

namespace Pmb\Helloworld\Controller\Hello;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class World
 */
class World implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute method
     */
    public function execute()
    {
        return $this->pageFactory->create();;
    }
}
