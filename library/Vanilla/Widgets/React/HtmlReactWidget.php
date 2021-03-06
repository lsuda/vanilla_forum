<?php
/**
 * @author Adam Charron <adam.c@vanillaforums.com>
 * @copyright 2009-2021 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

namespace Vanilla\Widgets\React;

use Garden\Schema\Schema;

/**
 * Widget for rendering raw HTML in react.
 */
class HtmlReactWidget implements ReactWidgetInterface, CombinedPropsWidgetInterface {

    use CombinedPropsWidgetTrait;

    /**
     * @inheritdoc
     */
    public function getComponentName(): string {
        return 'HtmlWidget';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetSchema(): Schema {
        return Schema::parse([
            'html:s' => [
                'description' => 'Sanitized HTML to render.'
            ],
        ]);
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetName(): string {
        return 'Html Widget';
    }

    /**
     * @inheritdoc
     */
    public static function getWidgetID(): string {
        return 'html';
    }
}
