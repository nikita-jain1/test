<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Beauty;

class Beauty extends AbstractCommand
{
  protected function configure()
  {
    $this
      ->setName('import:beauty')
      ->setDescription('this command imports beauty data')
      ->addArgument("type", InputArgument::REQUIRED);
  }
  protected function execute(InputInterface $input, OutputInterface $output): int
  {
    $type = $input->getArgument("type");
    $beauty = new Beauty();
    $beauty->setKey('b2');
    $beauty->setParentId(10);
    $beauty->setSku("b2");
    $beauty->setAmount(10000);
    $beauty->setDescription('hIRCARE');

    if ($type == "") {
      $jewellery->setKey('ring4');
      $jewellery->setParentId(33);
      $ring = new \Pimcore\Model\DataObject\Objectbrick\Data\Ring($jewellery);
 
      $ring->setModelNo(468);
      $jewellery->getJewelleryAttribute()->setRing($ring);
    } else if ($type == "bangles") {

      $jewellery->setKey('bangles2');
      $jewellery->setParentId(35);
      $bangles = new \Pimcore\Model\DataObject\Objectbrick\Data\Bangle($jewellery);
      $bangles->setSize("20");
      $jewellery->getJewelleryAttribute()->setBangle($bangles);
    $jewellery->setDesignRelation([$design]);
    } else if ($type == "necklace") {
      $jewellery->setKey('necklace2');
      $jewellery->setParentId(36);
      $necklace = new \Pimcore\Model\DataObject\Objectbrick\Data\Necklace($jewellery);
      $necklace->setMaterial("gold");
      $necklace->setLength("short");
      $jewellery->getJewelleryAttribute()->setNecklace($necklace);
      $jewellery->setDesignRelation([$design]);
    } else if ($type == "bracelet") {
      $jewellery->setKey('bracelet2');
      $jewellery->setParentId(34);
      $bracelet = new \Pimcore\Model\DataObject\Objectbrick\Data\Bracelet($jewellery);
      $bracelet->setSize(6);
     
      $jewellery->getJewelleryAttribute()->setBracelet($bracelet);
      $jewellery->setDesignRelation([$design]);
    }

    $jewellery->save();
    return 1;
  }
}
?>