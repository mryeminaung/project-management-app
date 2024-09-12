import TaskLayout from "@/Layouts/TaskLayout";
import { Head } from "@inertiajs/react";
import TaskList from "./Partials/TaskList";
import Pagination from "@/Components/Pagination";

export default function PendingTasks({ tasks }) {
    return (
        <TaskLayout>
            <Head title="Pending Tasks" />

            <TaskList tasks={tasks} />
            <div className="mx-3">
                <Pagination tasks={tasks} />
            </div>
        </TaskLayout>
    );
}
