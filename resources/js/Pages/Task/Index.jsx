import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import CompletedTasks from "./Partials/CompletedTasks";
import PendingTasks from "./Partials/PendingTasks";
import InProgressTasks from "./Partials/InProgressTasks";
import TaskLayout from "@/Layouts/TaskLayout";

export default function Index({ auth, tasks }) {
    console.log(tasks);

    return <TaskLayout auth={auth} />;
}
