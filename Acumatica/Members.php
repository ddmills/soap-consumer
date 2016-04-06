<?php

class Members
{

    /**
     * @var ItemSalesCategoryMember $ItemSalesCategoryMember
     */
    protected $ItemSalesCategoryMember = null;

    /**
     * @param ItemSalesCategoryMember $ItemSalesCategoryMember
     */
    public function __construct($ItemSalesCategoryMember)
    {
      $this->ItemSalesCategoryMember = $ItemSalesCategoryMember;
    }

    /**
     * @return ItemSalesCategoryMember
     */
    public function getItemSalesCategoryMember()
    {
      return $this->ItemSalesCategoryMember;
    }

    /**
     * @param ItemSalesCategoryMember $ItemSalesCategoryMember
     * @return Members
     */
    public function setItemSalesCategoryMember($ItemSalesCategoryMember)
    {
      $this->ItemSalesCategoryMember = $ItemSalesCategoryMember;
      return $this;
    }

}
