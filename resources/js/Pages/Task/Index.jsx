import TaskLayout from "@/Layouts/TaskLayout";
import TaskList from "./Partials/TaskList";
import { Head, Link } from "@inertiajs/react";
import Pagination from "@/Components/Pagination";

export default function Index({ tasks }) {
    return (
        <TaskLayout>
            <Head title="All Tasks" />

            <div className="flex items-center justify-end mr-4 mt-4">
                <Link
                    href={route("tasks.index")}
                    className="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                    Refresh
                </Link>
            </div>
            <TaskList tasks={tasks} />
            {/* <div className="mx-3">
                <Pagination tasks={allTasks.links} />
            </div> */}
        </TaskLayout>
    );
}
