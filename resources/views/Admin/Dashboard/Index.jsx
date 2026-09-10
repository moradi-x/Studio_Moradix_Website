import Layout from "../Layouts/Layout";

export default function Index({ stats }) {
    return (

        <Layout>

            <div>

                <h1 className="text-3xl font-bold">
                    Dashboard
                </h1>


                <div className="grid grid-cols-1 md:grid-cols-4 gap-5 mt-8">


                    <div className="bg-white p-6 rounded shadow">
                        <h3 className="text-gray-500">
                            {stats.projects}

                        </h3>

                        <p className="text-2xl font-bold mt-2">
                            10
                        </p>
                    </div>


                    <div className="bg-white p-6 rounded shadow">
                        <h3 className="text-gray-500">
                            {stats.categories}

                        </h3>

                        <p className="text-2xl font-bold mt-2">
                            5
                        </p>
                    </div>


                    <div className="bg-white p-6 rounded shadow">
                        <h3 className="text-gray-500">
                            {stats.technologies}

                        </h3>

                        <p className="text-2xl font-bold mt-2">
                            {stats.requests}
                        </p>
                    </div>


                    <div className="bg-white p-6 rounded shadow">
                        <h3 className="text-gray-500">
                            Requests
                        </h3>

                        <p className="text-2xl font-bold mt-2">
                            10
                        </p>
                    </div>


                </div>

            </div>


        </Layout>

    );

}