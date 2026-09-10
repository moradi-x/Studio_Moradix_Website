import Layout from "../Layouts/Layout";
import { useForm } from "@inertiajs/react";


export default function Edit({ category }) {


    const { data, setData, put, errors } = useForm({

        name: category.name,

        slug: category.slug,

    });



    function submit(e) {

        e.preventDefault();


        put(`/admin/categories/${category.id}`);

    }



    return (

        <Layout>


            <div className="max-w-2xl">


                <h1 className="text-2xl font-bold mb-6">
                    Edit Category
                </h1>



                <form
                    onSubmit={submit}
                    className="bg-white p-6 rounded-lg shadow"
                >


                    <div className="mb-5">


                        <label className="block mb-2 font-medium">
                            Name
                        </label>


                        <input

                            type="text"

                            value={data.name}

                            onChange={(e) =>
                                setData('name', e.target.value)
                            }

                            className="
                                w-full
                                border
                                rounded-lg
                                px-4
                                py-2
                            "

                        />


                        {errors.name && (

                            <p className="text-red-500 text-sm mt-1">
                                {errors.name}
                            </p>

                        )}


                    </div>




                    <div className="mb-5">


                        <label className="block mb-2 font-medium">
                            Slug
                        </label>


                        <input

                            type="text"

                            value={data.slug}

                            onChange={(e) =>
                                setData('slug', e.target.value)
                            }

                            className="
                                w-full
                                border
                                rounded-lg
                                px-4
                                py-2
                            "

                        />


                        {errors.slug && (

                            <p className="text-red-500 text-sm mt-1">
                                {errors.slug}
                            </p>

                        )}


                    </div>




                    <button

                        type="submit"

                        className="
                            bg-green-600
                            text-white
                            px-6
                            py-2
                            rounded-lg
                            hover:bg-green-700
                        "

                    >

                        Update Category

                    </button>



                </form>


            </div>


        </Layout>

    );

}