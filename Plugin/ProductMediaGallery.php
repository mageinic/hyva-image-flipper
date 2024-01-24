<?php
/**
 * MageINIC
 * Copyright (C) 2023 MageINIC <support@mageinic.com>
 *
 * NOTICE OF LICENSE
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see https://opensource.org/licenses/gpl-3.0.html.
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category MageINIC
 * @package Hyva_MageINICImageFlipper
 * @copyright Copyright (c) 2023 MageINIC (https://www.mageinic.com/)
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MageINIC <support@mageinic.com>
 */

namespace Hyva\MageINICImageFlipper\Plugin;

use MageINIC\ImageFlipper\ViewModel\ConfigurableFlipper;
use Magento\Catalog\Helper\ImageFactory;
use Magento\Swatches\Helper\Data as SwatchesHelper;
use Magento\Catalog\Model\Product;

class ProductMediaGallery
{
    /**
     * @var ImageFactory
     */
    private ImageFactory $imageFactory;

    /**
     * @var ConfigurableFlipper
     */
    private ConfigurableFlipper $configurableFlipper;

    /**
     * @param ImageFactory $imageFactory
     * @param ConfigurableFlipper $configurableFlipper
     */
    public function __construct(
        ImageFactory $imageFactory,
        ConfigurableFlipper $configurableFlipper
    ) {
        $this->imageFactory = $imageFactory;
        $this->configurableFlipper = $configurableFlipper;
    }

    /**
     * @param SwatchesHelper $subject
     * @param $result
     * @param Product $product
     * @return array
     */
    public function afterGetProductMediaGallery(
        SwatchesHelper $subject,
        $result,
        Product $product
    ) {
        $flipperImage = ["flipper_image" => $this->configurableFlipper->getFlipImage($product)];
        $result = array_merge($result, $flipperImage);
        return $result;
    }
}
