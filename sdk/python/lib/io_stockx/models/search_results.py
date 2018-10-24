# coding: utf-8

"""
    StockX API

    PRERELEASE API - Subject to change before release. Provides access to StockX's public services, allowing end users to query for product and order information.  # noqa: E501

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six

from io_stockx.models.search_hit import SearchHit  # noqa: F401,E501


class SearchResults(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'hits': 'list[SearchHit]',
        'nb_hits': 'int'
    }

    attribute_map = {
        'hits': 'hits',
        'nb_hits': 'nbHits'
    }

    def __init__(self, hits=None, nb_hits=None):  # noqa: E501
        """SearchResults - a model defined in Swagger"""  # noqa: E501

        self._hits = None
        self._nb_hits = None
        self.discriminator = None

        if hits is not None:
            self.hits = hits
        if nb_hits is not None:
            self.nb_hits = nb_hits

    @property
    def hits(self):
        """Gets the hits of this SearchResults.  # noqa: E501


        :return: The hits of this SearchResults.  # noqa: E501
        :rtype: list[SearchHit]
        """
        return self._hits

    @hits.setter
    def hits(self, hits):
        """Sets the hits of this SearchResults.


        :param hits: The hits of this SearchResults.  # noqa: E501
        :type: list[SearchHit]
        """

        self._hits = hits

    @property
    def nb_hits(self):
        """Gets the nb_hits of this SearchResults.  # noqa: E501


        :return: The nb_hits of this SearchResults.  # noqa: E501
        :rtype: int
        """
        return self._nb_hits

    @nb_hits.setter
    def nb_hits(self, nb_hits):
        """Sets the nb_hits of this SearchResults.


        :param nb_hits: The nb_hits of this SearchResults.  # noqa: E501
        :type: int
        """

        self._nb_hits = nb_hits

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, SearchResults):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
