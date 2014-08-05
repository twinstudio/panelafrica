<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new Panelafrica\Bundle\NewsBundle\NewsBundle(),
            new Panelafrica\Bundle\eventBundle\EventBundle(),
            new Panelafrica\Bundle\InterviewBundle\InterviewBundle(),
            new Panelafrica\Bundle\AfficheBundle\AfficheBundle(),
            new Panelafrica\Bundle\SpotBundle\SpotBundle(),
            new Panelafrica\Bundle\TombolaBundle\TombolaBundle(),
            new Panelafrica\Bundle\PromoBundle\PromoBundle(),
            new Panelafrica\Bundle\QuestionnaireBundle\QuestionnaireBundle(),
            new Panelafrica\Bundle\MiniSondageBundle\MiniSondageBundle(),
            new Panelafrica\PanelBundle\PanelBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
