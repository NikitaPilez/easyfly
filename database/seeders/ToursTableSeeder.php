<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'tours');
        if (!$dataType->exists) {
            $dataType->fill(
                [
                    'name' => 'tours',
                    'display_name_singular' => 'Tour',
                    'display_name_plural' => 'Tours',
                    'icon' => 'voyager-anchor',
                    'model_name' => 'App\Models\Tour',
                    'policy_name' => '',
                    'controller' => '',
                    'generate_permissions' => 1,
                    'description' => '',
                ]
            )->save();
        }

        //Data Rows
        $tourDataType = DataType::where('slug', 'tours')->firstOrFail();
        $dataRow = $this->dataRow($tourDataType, 'id');
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

        $dataRow = $this->dataRow($tourDataType, 'tour_belongsto_agency_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
               'type'         => 'relationship',
               'display_name' => 'Agency',
               'required'     => 1,
               'browse'       => 1,
               'read'         => 1,
               'edit'         => 1,
               'add'          => 1,
               'delete'       => 1,
               'order'        => 2,
               'details'     => [
                   'model' => 'App\\Models\\Agency',
                   'table' => 'agencies',
                   'type' => 'belongsTo',
                   'column' => 'agency_id',
                   'key' => 'id',
                   'label' => 'name',
                   'pivot_table' => 'agencies',
                   'pivot' => '0',
                   'taggable' => '0',
               ]
            ])->save();
        }

        $dataRow = $this->dataRow($tourDataType, 'title');
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

        $dataRow = $this->dataRow($tourDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text_area',
                    'display_name' => __('voyager::seeders.data_rows.excerpt'),
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

        $dataRow = $this->dataRow($tourDataType, 'body');
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
                    'order' => 5,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($tourDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'Price',
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

        $dataRow = $this->dataRow($tourDataType, 'city');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => 'City',
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

        $dataRow = $this->dataRow($tourDataType, 'image');
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
                    'order' => 7,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($tourDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'text',
                    'display_name' => __('voyager::seeders.data_rows.slug'),
                    'required' => 1,
                    'browse' => 0,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => [
                        'slugify' => [
                            'origin' => 'title',
                            'forceUpdate' => true,
                        ],
                        'validation' => [
                            'rule' => 'unique:tours,slug',
                        ],
                    ],
                    'order' => 8,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($tourDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill(
                [
                    'type' => 'select_dropdown',
                    'display_name' => __('voyager::seeders.data_rows.status'),
                    'required' => 1,
                    'browse' => 1,
                    'read' => 1,
                    'edit' => 1,
                    'add' => 1,
                    'delete' => 1,
                    'details' => [
                        'default' => 'DRAFT',
                        'options' => [
                            'PUBLISHED' => 'published',
                            'DRAFT' => 'draft',
                            'PENDING' => 'pending',
                        ],
                    ],
                    'order' => 11,
                ]
            )->save();
        }

        $dataRow = $this->dataRow($tourDataType, 'created_at');
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

        $dataRow = $this->dataRow($tourDataType, 'updated_at');
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
                'title' => 'Tours',
                'url' => '',
                'route' => 'voyager.tours.index',
            ]
        );

        if (!$menuItem->exists) {
            $menuItem->fill(
                [
                    'target' => '_self',
                    'icon_class' => 'voyager-anchor',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 16,
                ]
            )->save();
        }

        //Permissions
        Permission::generateFor('tours');
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
