<?php
namespace BBIT\BootstrapBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class BootstrapExtension extends \Twig_Extension
{
	
	
	private $container;
	
	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}
	
	public function getFunctions()
    {
        return array(
            'insertBootstrap' => new \Twig_Function_Method($this, 'insertBootstrap', array(
            'is_safe' => array('html')
        ))
        );
    }
   
    /**
     * Converts a string to time
     *
     * @param string $string
     * @return int
     */
    public function insertBootstrap()
    {
        return $this->container->get('templating')->render('BBITBootstrapBundle:Default:default.html.twig');
    }

    public function getName()
    {
        return 'bootstrap_extension';
    }
}
