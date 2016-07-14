<?php
/**
 * This file is part of the Global Trading Technologies Ltd workflow-extension-bundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * (c) fduch <alex.medwedew@gmail.com>
 * @date 29.06.16
 */

return array(
    new \Symfony\Bundle\MonologBundle\MonologBundle(),
    new \Symfony\Bundle\WorkflowBundle\WorkflowBundle(),
    new \Gtt\Bundle\WorkflowExtensionsBundle\WorkflowExtensionsBundle(),
    new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
    new \Gtt\Bundle\WorkflowExtensionsBundle\Tests\Functional\Configuration\ScheduleCase\Fixtures\ClientBundle\ClientBundle(),
    new \JMS\JobQueueBundle\JMSJobQueueBundle()
);