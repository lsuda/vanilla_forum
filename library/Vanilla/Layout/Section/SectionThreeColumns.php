<?php
/**
 * @author Adam Charron <adam.c@vanillaforums.com>
 * @copyright 2009-2021 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

namespace Vanilla\Layout\Section;

use Garden\Schema\Schema;
use Vanilla\Widgets\Schema\ReactChildrenSchema;

/**
 * Widget representing a 3 column layout.
 */
class SectionThreeColumns extends AbstractLayoutSection {

    /**
     * @inheritdoc
     */
    public function getComponentName(): string {
        return 'SectionThreeColumns';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetSchema(): Schema {
        return Schema::parse([
            'leftTop?' => new ReactChildrenSchema(),
            'leftBottom?' => new ReactChildrenSchema(),
            'mainTop?' => new ReactChildrenSchema(),
            'mainBottom?' => new ReactChildrenSchema(),
            'rightTop?' => new ReactChildrenSchema(),
            'rightBottom?' => new ReactChildrenSchema(),
            'breadcrumbs?' => new ReactChildrenSchema(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetName(): string {
        return '3 Column Layout';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetID(): string {
        return 'section.3-columns';
    }
}
