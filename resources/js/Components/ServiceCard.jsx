export default function ServiceCard({ title, description }) {

    return (
        <div className="border rounded-2xl p-8 hover:shadow-lg transition">

            <h3 className="text-2xl font-bold mb-4">
                {title}
            </h3>

            <p className="text-gray-600">
                {description}
            </p>

        </div>
    );

}