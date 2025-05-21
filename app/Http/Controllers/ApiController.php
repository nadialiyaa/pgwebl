<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;
use App\Models\PolygonModel;
use App\Models\PolylineModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->points = new PointsModel();
        $this->polylines = new PolylineModel();
        $this->polygons = new PolygonModel();
    }
    public function points()
    {
        $points = $this->points->geojson_points();

        return response()->json($points);
    }
    public function point($id)
    {
        $points = $this->points->geojson_point($id);

        return response()->json($points);
    }

    public function polylines()
    {
        $polylines = $this->polylines->geojson_polylines();

        return response()->json($polylines);
    }
    public function polyline($id)
    {
        $polylines = $this->polylines->geojson_polyline($id);

        return response()->json($polylines);
    }
    public function polygons()
    {
        $polygons = $this->polygons->geojson_polygons();

        return response()->json($polygons);
    }
    public function polygon($id)
    {
        $polygons = $this->polygons->geojson_polygon($id);

        return response()->json($polygons);
    }
}
