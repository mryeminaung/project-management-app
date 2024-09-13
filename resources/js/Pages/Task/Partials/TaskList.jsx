import { Link } from "@inertiajs/react";

export default function TaskList({ tasks }) {
    return (
        <code>
            <div className="dark:text-gray-100 p-5 space-y-3">
                {tasks.data.map((task) => {
                    return (
                        <div
                            key={task.id}
                            className="rounded-md p-3 dark:bg-gray-900"
                        >
                            <p className="text-yellow-500">
                                Name : {task.name}
                            </p>
                            <p className="text-red-500">
                                Status : {task.status}
                            </p>
                            <p className="text-blue-500">
                                Priority : {task.priority}
                            </p>
                            <p></p>
                        </div>
                    );
                })}
            </div>
        </code>
    );
}
