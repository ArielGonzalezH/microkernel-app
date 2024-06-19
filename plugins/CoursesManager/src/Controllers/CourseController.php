<?php

namespace plugins\CoursesManager\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use plugins\CoursesManager\Models\Course;
use Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function create()
    {
        // Eliminar esta función si no se utiliza una vista
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ID_STATUS' => 'required|numeric',
            'NAME_COURSE' => 'required|string|max:35'
        ]);

        $course = Course::create([
            'ID_STATUS' => $validatedData['ID_STATUS'],
            'NAME_COURSE' => $validatedData['NAME_COURSE']
        ]);

        return response()->json(['message' => 'Course created successfully.', 'course' => $course], 201);
    }

    public function edit($id)
    {
        // Eliminar esta función si no se utiliza una vista
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validatedData = $request->validate([
            'ID_STATUS' => 'required|numeric',
            'NAME_COURSE' => 'required|string|max:35'
        ]);

        $course->update([
            'ID_STATUS' => $validatedData['ID_STATUS'],
            'NAME_COURSE' => $validatedData['NAME_COURSE']
        ]);

        return response()->json(['message' => 'Course updated successfully.', 'course' => $course]);
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(['message' => 'Course deleted successfully.']);
    }
}
