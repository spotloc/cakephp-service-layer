<?php
/**
 * Copyright (c) Florian Krämer
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Florian Krämer
 * @link          https://github.com/burzum/cakephp-service-layer
 * @since         1.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
declare(strict_types = 1);

namespace Burzum\Cake\Service;

use Cake\Http\ServerRequest;
use Cake\ORM\ResultSet;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * PaginationServiceTest
 */
class PaginationServiceTest extends TestCase
{
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'core.Articles'
    ];

    /**
     * testPaginate
     *
     * @return void
     */
    public function testPaginate()
    {
        $request = new ServerRequest();
        $service = new PaginationService($request);

        $this->assertFalse($request->getParam('paging'));

        $articles = TableRegistry::get('Articles');
        $result = $service->paginate($articles);
        $params = $request->getParam('paging');
        $expected = [
            'Articles' => [
                'finder' => 'all',
                'page' => 1,
                'current' => 3,
                'count' => 3,
                'perPage' => 20,
                'prevPage' => false,
                'nextPage' => false,
                'pageCount' => 1,
                'sort' => null,
                'direction' => false,
                'limit' => null,
                'sortDefault' => false,
                'directionDefault' => false,
                'scope' => null,
                'completeSort' => []
            ],
            false
        ];
        $this->assertInternalType('array', $params);
        $this->assertEquals($expected, $params);
        $this->assertInstanceOf(ResultSet::class, $result);
    }
}
