import { Link } from "@inertiajs/react";

export default function Pagination({ tasks }) {
    return (
        <div className="flex items-center justify-end px-3 my-3">
            {/* <!-- Previous Button --> */}
            <Link
                href={tasks.links.prev}
                className={`flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg ${
                    tasks.links.prev && " hover:bg-gray-100 hover:text-gray-700"
                } dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white`}
            >
                Previous
            </Link>

            {/* <!-- Next Button --> */}
            <Link
                href={tasks.links.next}
                disabled={tasks.links.next === null ? true : false}
                className={`flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg ms-3  ${
                    tasks.links.next && " hover:bg-gray-100 hover:text-gray-700"
                } dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white`}
            >
                Next
            </Link>
        </div>
    );
}
