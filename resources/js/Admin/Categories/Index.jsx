import Layout from "../Layouts/Layout";
import { Link, router } from "@inertiajs/react";


export default function Index({ categories }) {


    function deleteCategory(id) {

        if (confirm("Delete this category?")) {

            router.delete(route('admin.categories.destroy', id));

        }

    }


    return (

        <Layout>


            <div>


                <div className="flex justify-between items-center mb-6">


                    <h1 className="text-2xl font-bold">
                        Categories
                    </h1>


                    <Link
                        href={route('admin.categories.create')}
                        className="
                            bg-green-600
                            text-white
                            px-5
                            py-2
                            rounded-lg
                            hover:bg-green-700
                            transition
                        "
                    >
                        Create Category
                    </Link>


                </div>



                <div className="bg-white rounded-lg shadow overflow-hidden">


                    <table className="w-full text-sm">


                        <thead className="bg-gray-100">


                            <tr>


                                <th className="px-5 py-3 text-left">
                                    #
                                </th>


                                <th className="px-5 py-3 text-left">
                                    Name
                                </th>


                                <th className="px-5 py-3 text-left">
                                    Slug
                                </th>


                                <th className="px-5 py-3 text-left">
                                    Actions
                                </th>


                            </tr>


                        </thead>



                        <tbody>


                            {categories.data.map((category) => (


                                <tr
                                    key={category.id}
                                    className="border-t hover:bg-gray-50"
                                >


                                    <td className="px-5 py-3">
                                        {category.id}
                                    </td>


                                    <td className="px-5 py-3 font-medium">
                                        {category.name}
                                    </td>


                                    <td className="px-5 py-3 text-gray-600">
                                        {category.slug}
                                    </td>


                                    <td className="px-5 py-3 flex gap-3">


                                        <Link
                                            href={route('admin.categories.edit', category.id)}
                                            className="
                                                bg-blue-500
                                                text-white
                                                px-4
                                                py-1.5
                                                rounded
                                                text-xs
                                                hover:bg-blue-600
                                            "
                                        >
                                            Edit
                                        </Link>



                                        <button

                                            onClick={() => deleteCategory(category.id)}

                                            className="
                                                bg-red-500
                                                text-white
                                                px-4
                                                py-1.5
                                                rounded
                                                text-xs
                                                hover:bg-red-600
                                            "
                                        >
                                            Delete
                                        </button>


                                    </td>


                                </tr>


                            ))}


                        </tbody>


                    </table>


                </div>



                {/* Pagination */}

                <div className="mt-6 flex gap-2">


                    {categories.links.map((link, index) => (

                        <Link
                            key={index}
                            href={link.url || '#'}
                            className={`
                                px-3
                                py-1.5
                                rounded
                                text-sm

                                ${
                                    link.active
                                    ? "bg-green-600 text-white"
                                    : "bg-gray-200 hover:bg-gray-300"
                                }
                            `}
                            dangerouslySetInnerHTML={{
                                __html: link.label
                            }}
                        />

                    ))}


                </div>


            </div>


        </Layout>

    );

}