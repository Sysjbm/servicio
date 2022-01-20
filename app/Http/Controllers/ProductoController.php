<?php

namespace App\Http\Controllers;

Use App\Producto;
use Illuminate\Http\Request;

/**
 * @OA\Get(
 * path="/servicio/public/api/productos",
 * security={{ "Bearer":{} }},
 * summary="Lista de productos",
 * description="Aquí podrás ver la lista de los productos de la tienda. Ten en cuenta que debes ingresar el siguiente token: Bearer YugAmlec3fZINlINjcVWsiQ3r6cxlgreFgWmGLv3jpHtSzi3PeuqCkWESyYB en el botón superior llamado Authorze",
 * operationId="productos",
 * tags={"Productos"},
 * @OA\Response(
 *    response=200,
 *    description="Respuesta",
 *        )
 *     )
 * )
 */
/**
* @OA\SecurityScheme(
*       scheme="Bearer",
*       securityScheme="Bearer",
*       type="apiKey",
*       in="header",
*       name="Authorization",
* )
*/

/**
 * @OA\Get(
 * path="/servicio/public/api/productos/consultar/{id}",
 * security={{ "Bearer":{} }},
 * summary="Consultar un producto por ID",
 * description="Aquí podrás consultar un producto por ID de la lista de productos de la tienda. Ten en cuenta que debes ingresar el siguiente token: Bearer YugAmlec3fZINlINjcVWsiQ3r6cxlgreFgWmGLv3jpHtSzi3PeuqCkWESyYB en el botón superior llamado Authorze",
 * operationId="productos",
 * tags={"Productos"},
      *     @OA\Parameter(
     *        name="id",
     *        in="path",
     *        description="producto Id",
     *        @OA\Schema(
     *           type="integer",
     *           format="int64"
     *        ),
     *        required=true,
     *        example=1
     *     ),
 * @OA\Response(
 *    response=200,
 *    description="Respuesta"
 *        )
 *     )
 * )
 */
    class ProductoController extends Controller
    {

    	public function index()
    	{
    		return Producto::all();
    	}

    	public function show(Producto $producto)
    	{
    		return $producto;
    	}
    }
