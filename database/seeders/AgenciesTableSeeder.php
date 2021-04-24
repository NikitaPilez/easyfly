<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'agencies');
        if (!$dataType->exists) {
            $dataType->fill(
                [
                    'name' => 'agencies',
                    'display_name_singular' => 'Agency',
                    'display_name_plural' => 'Agencies',
                    'icon' => 'voyager-anchor',
                    'model_name' => 'App\Models\Agency',
                    'policy_name' => '',
                    'controller' => '',
                    'generate_permissions' => 1,
                    'description' => '',
                ]
            )->save();
        }

        //Data Rows
        $agencyDataType = DataType::where('slug', 'agencies')->firstOrFail();
        $dataRow = $this->dataRow($agencyDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'number',
                    'display_name' => __('voyager::seeders.data_rows.id'),
                    'required' => 1,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 1,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'agency_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'User',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
                'details'     => [
                    'model' => 'App\\Models\\User',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'user_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'users',
                    'pivot' => '0',
                    'taggable' => '0',
                ]
            ])->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => __('voyager::seeders.data_rows.title'),
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 3,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'rich_text_box',
                    'display_name' => __('voyager::seeders.data_rows.body'),
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 4,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'image',
                    'display_name' => 'Image',
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => [
                        'resize' => [
                            'width' => '1000',
                            'height' => 'null',
                        ],
                        'quality' => '70%',
                        'upsize' => true,
                        'thumbnails' => [
                            [
                                'name' => 'medium',
                                'scale' => '50%',
                            ],
                            [
                                'name' => 'small',
                                'scale' => '25%',
                            ],
                            [
                                'name' => 'cropped',
                                'crop' => [
                                    'width' => '300',
                                    'height' => '250',
                                ],
                            ],
                        ],
                    ],
                    'order' => 5,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'address');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Address',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 6,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Phone',
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'order' => 7,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'timestamp',
                    'display_name' => __('voyager::seeders.data_rows.created_at'),
                    'required' => 0,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 12,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($agencyDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'timestamp',
                    'display_name' => __('voyager::seeders.data_rows.updated_at'),
                    'required' => 0,
                    'browse' => 0,
                    'read' => 0,
                    'edit' => 0,
                    'add' => 0,
                    'delete' => 0,
                    'order' => 13,
                ]
            )->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew(
            [
                'menu_id' => $menu->id,
                'title' => 'Agencies',
                'url' => '',
                'route' => 'voyager.agencies.index',
            ]
        );

        if (!$menuItem->exists) {
            $menuItem->fill(
                [
                    'target' => '_self',
                    'icon_class' => 'voyager-anchor',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 17,
                ]
            )->save();
        }

        //Permissions
        Permission::generateFor('agencies');
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew(
            [
                'data_type_id' => $type->id,
                'field' => $field,
            ]
        );
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
