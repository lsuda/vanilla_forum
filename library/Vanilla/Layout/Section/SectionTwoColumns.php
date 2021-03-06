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
 * Widget representing a 2 column layout.
 */
class SectionTwoColumns extends AbstractLayoutSection {

    /**
     * @inheritdoc
     */
    public function getComponentName(): string {
        return 'SectionTwoColumns';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetSchema(): Schema {
        return Schema::parse([
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
        return '2 Column Layout';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetID(): string {
        return 'section.2-columns';
    }
}
